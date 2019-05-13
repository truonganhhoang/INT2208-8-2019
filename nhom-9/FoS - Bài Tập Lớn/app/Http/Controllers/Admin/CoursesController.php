<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCoursesRequest;
use App\Http\Requests\Admin\UpdateCoursesRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class CoursesController extends Controller
{
    use FileUploadTrait;

    /**
     * Màn hình chính của môn khóa học
     *
     */
    public function index()
    {
        if (! Gate::allows('course_access')) {
            return abort(401);
        }

        if (request('show_deleted') == 1) {
            if (! Gate::allows('course_delete')) {
                return abort(401);
            }
            $courses = Course::onlyTrashed()->ofTeacher()->get();
        } else {
            $courses = Course::ofTeacher()->get();
        }

        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Hiển thị môn khóa học
     *
     */
    public function create()
    {
        if (! Gate::allows('course_create')) {
            return abort(401);
        }
        $teachers = \App\User::whereHas('role', function ($q) { $q->where('role_id', 2); } )->get()->pluck('name', 'id');

        return view('admin.courses.create', compact('teachers'));
    }

    /**
     * Lưu trữ một khóa học mới được tạo ra 
     *
     */
    public function store(StoreCoursesRequest $request)
    {
        if (! Gate::allows('course_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $course = Course::create($request->all());
        $teachers = \Auth::user()->isAdmin() ? array_filter((array)$request->input('teachers')) : [\Auth::user()->id];
        $course->teachers()->sync($teachers);

        return redirect()->route('admin.courses.index');
    }


    /**
     * Hiển thị các chức năng để chỉnh sửa khóa học.
     *
     */
    public function edit($id)
    {
        if (! Gate::allows('course_edit')) {
            return abort(401);
        }
        $teachers = \App\User::whereHas('role', function ($q) { $q->where('role_id', 2); } )->get()->pluck('name', 'id');

        $course = Course::findOrFail($id);

        return view('admin.courses.edit', compact('course', 'teachers'));
    }

    /**
     * Cập nhật khóa học
     *
     */
    public function update(UpdateCoursesRequest $request, $id)
    {
        if (! Gate::allows('course_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $course = Course::findOrFail($id);
        $course->update($request->all());
        $teachers = \Auth::user()->isAdmin() ? array_filter((array)$request->input('teachers')) : [\Auth::user()->id];
        $course->teachers()->sync($teachers);

        return redirect()->route('admin.courses.index');
    }


    /**
     * Màn hỉnh khóa học
     *
     */
    public function show($id)
    {
        if (! Gate::allows('course_view')) {
            return abort(401);
        }
        $teachers = \App\User::get()->pluck('name', 'id');$lessons = \App\Lesson::where('course_id', $id)->get();$tests = \App\Test::where('course_id', $id)->get();

        $course = Course::findOrFail($id);

        return view('admin.courses.show', compact('course', 'lessons', 'tests'));
    }


    /**
     * Xóa khóa học
     *
     */
    public function destroy($id)
    {
        if (! Gate::allows('course_delete')) {
            return abort(401);
        }
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('admin.courses.index');
    }

    /**
     * Xóa tất cả khóa học
     *
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('course_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Course::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Thêm lại các khóa học đã xóa
     *
     */
    public function restore($id)
    {
        if (! Gate::allows('course_delete')) {
            return abort(401);
        }
        $course = Course::onlyTrashed()->findOrFail($id);
        $course->restore();

        return redirect()->route('admin.courses.index');
    }

    /**
     * Xóa vĩnh viễn khỏi khóa học
     *
     */
    public function perma_del($id)
    {
        if (! Gate::allows('course_delete')) {
            return abort(401);
        }
        $course = Course::onlyTrashed()->findOrFail($id);
        $course->forceDelete();

        return redirect()->route('admin.courses.index');
    }
}

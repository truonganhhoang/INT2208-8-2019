var multer = require('multer')
// var randomstring = require("randomstring");
var path = require('path');
let uploadFile = (field, maxCount, folder, fileNameLength, fileSize, fileExtension) => {
    var storage = multer.diskStorage({
        destination: function (req, file, cb) {
          cb(null, __pathUploads + folder + '/')
        },
        filename: function (req, file, cb) {
          cb(null, field + '-' + Date.now() + path.extname(file.originalname));
        }
    })
    const upload = multer({
        storage: storage,
    }).array(field, maxCount);
    return upload;
}
module.exports = {
    uploadFile: uploadFile
}

let createFilterStatus = (currentStatus) => {
    let statusFilter = [
      //   {name: 'Danh mục sản phẩm', value:'',link:'#', class: 'white'},
        {name: 'Thời trang nam', value:['Áo-thun', 'Áo-sơ-mi-nam', 'Áo-len', 'Áo-khoác-/vest-nam', 'Đồ-bộ-mặc-ở nhà', 'Quần-nam'],link:'#', class: 'white'},
        {name: 'Thời trang nữ', value:['Áo-phông', 'Đầm', 'Chân-váy', 'áo-sơ-mi-nữ', 'Áo-khoác-/Áo-vest-nữ', 'Đồ-thể-thao', 'quần-nữ'],link:'#', class: 'white'},
        {name: 'Thời trang trẻ em', value:['Giày-dép', 'Bé-gái-4-tới-14-tuổi', 'bé-gái-3-tới-4-tháng-tuổi', 'Bé-trai-4-tới-14-tuổi', 'bé-trai-3-tới-4-tháng-tuổi'],link:'#', class: 'white'},
        {name: 'Giày dép nữ', value:['Giày-đế-bằng', 'Giày-cao-gót', 'Giày-thể-thao-nữ', 'Sandal-nữ'],link:'#', class: 'white'},
        {name: 'Giày dép nam', value:['Giày-da', 'Giày-thể-thao-nam', 'Sandal-nam'],link:'#', class: 'white'},
        {name: 'Đồ cũ', value:['Đồ-cũ'],link:'#', class: 'white'},
      
      ];
    
      statusFilter.forEach((item, index) => {  
            //if(item.value !== 'danh-muc-san-pham') condition = {status: item.value};
            if(item.value === currentStatus)  statusFilter[index].class = 'danger text-white';
            
      });

      return statusFilter;
}

module.exports = {
    createFilterStatus
};
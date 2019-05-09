//  add to cart su dung locastorage

    var cart = [];
    // let sum = 0;
    $(function () {
        if (localStorage.cart) {
            cart = JSON.parse(localStorage.cart);
            showCart();

            // console.log(localStorage.getItem("total"));
            $(".Qty").text("(" + localStorage.getItem("total") + ")");
        }
    });

    function addToCart() {
        var price = $("#price").text();
        var name = $("#name").text();
        var qty = $("#amount").val();
        var id = $('#id').val();
        var img = $('#show-img').attr('src');

        // update qty nếu product đã có trg cart[]
        for (var i in cart) {
            if (cart[i].Product == name) {
                cart[i].Qty = qty;
                showCart();
                saveCart();
                setTimeout(function () { alert("đã thêm vào giỏ hàng");
                $(".Qty").text("(" + localStorage.getItem("total") + ")"); }, 500);
                let sum = total();
                localStorage.setItem('total', sum);
                return;
            }
        }
        // create JavaScript Object
        var item = { Img: img, Product: name, Price: price, Qty: qty, id: id };
        cart.push(item);
        saveCart();
        showCart();
        setTimeout(function () { alert("Thêm vào giỏ hàng thành công"); 
        $(".Qty").text("(" + localStorage.getItem("total") + ")");}, 500);
        let sum = total();
        localStorage.setItem('total', sum);
    }

    function deleteItem(index) {
        cart.splice(index, 1); // delete item at index
        showCart();
        saveCart();
        let sum = total();
        localStorage.setItem('total', sum);
        $(".Qty").text("(" + localStorage.getItem("total") + ")");
    }

    function saveCart() {
        if (window.localStorage) {
            localStorage.cart = JSON.stringify(cart);
        }
    }

    function showCart() {
        if (cart.length == 0) {
            $("#cartBody").css("visibility", "hidden");
            $("#note").css("visibility", "visible");
            return;
        }

        $("#cartBody").css("visibility", "visible");
        $("#note").css("visibility", "hidden");
        $("#cartBody").empty();
        for (let i in cart) {
            var item = cart[i];
            var Qty = parseInt(item.Qty);
            var Price = parseInt(item.Price.split('.').join(''));
            var row = "<tr><td>" + "<img src='" + item.Img + "' style='height:80px; wigth:45px;border:1px solid;'>" +
                "</td><td style='vertical-align: middle;'>" + item.Product +
                "</td><td style='vertical-align: middle;'>" + item.id +
                "</td><td style='vertical-align: middle;'>" + item.Qty +
                "</td><td style='vertical-align: middle;'>" + Qty * Price + 'đ' +
                "</td><td style='vertical-align: middle;'>" + "<button onclick='deleteItem(" + i + ")'>Delete</button></td></tr>";
            $("#cartBody").append(row);
        }
    }

    

    function total() {
        let sum = 0;
        for (let i in cart) {
            sum += parseInt(cart[i].Qty);
        }
        return sum;
   }
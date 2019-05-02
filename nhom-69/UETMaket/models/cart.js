module.exports= function Cart(oldcart) {
    this.items= oldcart.items || {};
    this.totalQty= oldcart.totalQty || 0;
    this.totalPrice=oldcart.totalPrice || 0;

    this.add= function(item, id){
        var productItem= this.items[id];
        if(!productItem) {
            productItem= this.items[id]= { item:item, qty: 0, price:0};
        }
        productItem.qty++;
        productItem.price=  productItem.item.price * productItem.qty;
        this.totalQty++;
        this.totalPrice+= productItem.item.price;

    };
    this.reduceOne= function(id) {
        this.items[id].qty--;
        this.items[id].price -= this.items.item.price;
        

    }
    this.generrateArray = function() {
        var arr=[];
        for( var id in this.items) {
            arr.push(this.items[id]);
        }
        return arr;
    };
};
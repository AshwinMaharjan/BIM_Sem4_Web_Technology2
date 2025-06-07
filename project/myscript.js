var cart[]
function addtocart(){
    event.preventDefault();
    var itemname=$("select[name='itemname']").val();
    var price=$("select[name='itemname'] option:selected").attr("price");
    var id=$("select[name='itemname'] option:selected").attr("myid");
    var quantity=$("select[name='quantity']").val();
    var obj={"id":id,"itemname":itemname,"price":price,"quantity":quantity}
    cart.push(obj);
    console.clear();
    displaycart();
  
}

function displaycart(){
    var table="<table border=1 class='display_table'>";
    table+="<tr><th>SN<th>Item Name<th>Quantity<th>Price<th>Total</tr>";
    var sumTotal=0;
    for(var i=0;i<cart.length;i++){
        table+="<tr>";

        table+="<td>"+(i+1);
        table+="<td>"+cart[i]['itemname'];
        table+="<td>"+cart[i]['quantity'];
        table+="<td>"+cart[i]['price'];
        var total=cart[i]['quantity']*cart[i]['price'];
        sumTotal+=total;
        table+="<td><button onlick='deleteFromCart("+i+") class='btn delete''>";
        table+="</tr>";
           
    }
    table+="<tr>";
    table+="<td align=center colspan=4>Total</td>";
    table+="<td>"+sumTotal;
    table+="</table>";
    $(".cart").html(table);    
    
}
function deleteFromCart(index){
    event.preventDefault();
    cart.splice(index,1);
    displaycart();

}




var myCart[]
function addDataToTable(){
    var itemName=$("select[name='item']").val();
    var quantity=$("select[name='quantity']").val();
    var price=$("select[name='item'] option:selected").attr("price");
    var id=$("select[name='item'] option:selected").attr("myid");
    var obj={"id":id,"itemName":itemName,"quantity":quantity,"price":price}
    myCart.push(obj);
    console.log(myCart);
    displayInTable();  
}

function displayInTable(){
    var table="<table border=1 class='display_table'>";
    table+="<tr><th>SN<th>Item Name<th>Quantity<th>Price<th>Total</tr>";
    var sumTotal=0;
    for(var i=0;i<cart.length;i++){
        table+="<tr>";

        table+="<td>"+(i+1);
        table+="<td>"+cart[i]['itemname'];
        table+="<td>"+cart[i]['quantity'];
        table+="<td>"+cart[i]['price'];
        var total=cart[i]['quantity']*cart[i]['price'];
        sumTotal+=total;
        table+="<td><button onlick='deleteFromCart("+i+") class='btn delete''>";
        table+="</tr>";
           
    }
    table+="<tr>";
    table+="<td align=center colspan=4>Total</td>";
    table+="<td>"+sumTotal;
    table+="</table>";
    $("#tbl").html(table);    
   
}


function deleteDataFromTable(index){
    event.preventDefault();
    myCart.splice(index,1);
    displayInTable();
}

function saveData(){
    var vendor=$("input[name='vendor").val();
    var data={"vendor":vendor}
    $.ajax({
        url:"savePurchase.php",
        method:"post",
        data:data,
        beforeSend:function(){},
        success:function(id){
            saveBill(id);
        },
        error: function(){}
    });
}

function saveBill(id){
    for(var i=0;i<myCart.length;i++){
        var obj=myCart[i];
        obj.vendor_id=id;
        $.ajax({
            url:"saveBill.php",
            method:"post",
            data:obj,
            beforeSend:function(){},
            success:function(response){
                $(".content").html(response);
            },
            error: function(){}
        });
    
    }

}

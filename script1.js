function sumPrice(vehicle){
    var p_adult = 7000; var p_child = 3000;
    var p_car = 10000; var p_bike = 5000;
    var sum;
    var c_adult = document.getElementById("count-adult").value;
    var c_child = document.getElementById("count-child").value;
    if(vehicle == "car"){
        sum = (c_adult * p_adult) + (c_child * p_child) + p_car;
    } else if(vehicle == "bike"){
        sum = (c_adult * p_adult) + (c_child * p_child) + p_bike;
    } else{
        sum = 0;
    }
    
    document.getElementById("price").value = sum;
}
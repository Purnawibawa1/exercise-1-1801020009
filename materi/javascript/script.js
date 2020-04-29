(function (){
    "use strict";

    document.addEventListener("DOMContentLoaded", function() {
        var state = document.getElementById("s-state");

        document.getElementById("cart-hplus");
        document.addEventListener("submit", estimateTotal);

        var btnEstimate = document.getElementById("btn-estimate");

        btnEstimate.disabled = true;

        state.addEventListener("change", function () {
            if(state.value === "" ){
                btnEstimate.disabled = true;
            }else{
                btnEstimate.disabled = false;
            }
        });

        function estimateTotal(event) {
            event.preventDefault();
            if(state.value === ""){
                alert("Silahkan Pilih Negara Pengiriman");
            
                state.focus();
                return;
            }

        var itemBball = document.getElementById("txt-q-bball").value,
            itemJersey = document.getElementById("txt-q-jersey").value,
            itemPower = document.getElementById("txt-q-power").value,
            itemMineral = document.getElementById("txt-q-mineral").value,
            shippingState = state.value,
            shippingMethod = document.querySelector("[name=r_method]:checked").value;

        var totalQty = parseInt(itemBball) + parseInt(itemJersey) + parseInt(itemPower) + parseInt(itemMineral),
            shippingCostPer, shippingCost, taxFactor = 1,
            estimate, totalItemPrice =( 90 * itemBball) + (25 * itemJersey) + (30 * itemPower) + (4 * itemMineral);

            if (shippingState === "CA"){
                taxFactor = 1.075;
            }

            switch (shippingMethod) {
                case "usps":
                    shippingCostPer = 2;
                    break;

                case "ups":
                    shippingCostPer = 3;
                    break;
                
                default: 
                    shippingCostPer = 0;
                    break; 
            }
            
        shippingCost = shippingCostPer * totalQty;

        estimate = "$" + (totalItemPrice * taxFactor + shippingCost).toFixed(2);

        document.getElementById("txt-estimate").value = estimate;
    
        var result = document.getElementById("results");

            result.innerHTML = "Total Items: " + parseInt(totalQty) + "<br>";
            result.innerHTML += "Total Shipping: $" + parseFloat(shippingCost).toFixed(2) + "<br>";
            result.innerHTML += "Tax: " + ((taxFactor - 1) * 100).toFixed(2) + "% (" + shippingState + ") <br>";
    }

    });
})();
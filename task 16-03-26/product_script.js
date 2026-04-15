let qtyInput =document.getElementById('qtyInput');
let totalPriceDisplay=document.getElementById('totalPrice');
let message=document.getElementById('msg');
const UNIT_PRICE=1000;
qtyInput.addEventListener('input',updateCalculation);

function updateCalculation() 
{
    let quantity=parseInt(qtyInput.value);
    if(isNaN(quantity)||quantity<0) 
        {
        message.style.color='red';
        message.innerHTML="Error: Invalid quantity entered!";
        totalPriceDisplay.value = 0;
        if (quantity<0){
            qtyInput.value= 0;
        }
    } 
    else {
        let total= UNIT_PRICE*quantity;
        totalPriceDisplay.value= total;
        message.innerHTML="";
        if(total >1000) 
            {
            alert("Congratulations! You are now eligible for a gift coupon.");
        }
    }
}
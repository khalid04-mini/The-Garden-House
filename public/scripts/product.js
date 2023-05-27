// const rangeInput= document.querySelectorAll(".range-input input");
// const min= document.querySelector(".price-span .field .span-min");
// const max= document.querySelector(".price-span .field .span-max");

// let minVal = parseInt(rangeInput[0].value) ;
// let maxVal = parseInt(rangeInput[1].value);
// min.textContent = minVal + " Dhs";    
// max.textContent = maxVal + " Dhs";
// let priceGap = 0;
// if((maxVal - minVal) < priceGap ){
//     if(e.target.className === "range-min"){
//         rangeInput[0].value = maxVal - priceGap
//     }else{
//         rangeInput[1].value = minVal + priceGap
//     }
// }

// rangeInput.forEach(input =>{
//     input.addEventListener("input",e =>{
        
//        if((maxVal - minVal) < priceGap ){
//             if(e.target.className === "range-min"){
//                 rangeInput[0].value = maxVal - priceGap
//             }else{
//                 rangeInput[1].value = minVal + priceGap
//             }
//        }
//        else{
//         min.textContent = minVal + " Dhs";
//         max.textContent = maxVal + " Dhs";
//         range.style.left = ((minVal / rangeInput[0].max) * 100) + "%";
//         range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
//     }
//     })
// })



//----------------------------------------------------------------

let priceshown = document.querySelector('.filter .price');
let pricerange = document.querySelector('.filter .price-range');
let iconprice= document.getElementById('price-icon');

priceshown.addEventListener('click',function(){
     if(pricerange.style.display==='block'){
        pricerange.style.display  = 'none'
        iconprice.className="bapf_colaps_smb fa fa-chevron-down"
        
     }
     else{
        pricerange.style.display  = 'block'
        iconprice.className="bapf_colaps_smb fa fa-chevron-up"
        
     }
})



//----------------------------------------------------------------

//----------------------------------------------------------------

let categoryshown = document.querySelector('.filter .category');
let categories = document.querySelector('.filter .category-items');
let iconcategory= document.getElementById('category-icon');

categoryshown.addEventListener('click',function(){
     if(categories.style.display==='grid'){
        categories.style.display  = 'none'
        iconcategory.className="bapf_colaps_smb fa fa-chevron-down"
        
     }
     else{
        categories.style.display  = 'grid'
        
        iconcategory.className="bapf_colaps_smb fa fa-chevron-up"
     }
})



//----------------------------------------------------------------
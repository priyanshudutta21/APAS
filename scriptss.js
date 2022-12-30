let addPrefBtn = document.getElementById("addPrefBtn");
let batch = document.getElementById("batch");
let year = document.getElementById("year");
let batchtextid = document.getElementById("batchtextid");
let yeartextid = document.getElementById("yeartextid");
let first = document.getElementById("msform1");
let second = document.getElementById("msform2");
addPrefBtn.addEventListener('click', ()=>{
    // console.log("hello")
    // console.log(batch.value);
    // console.log(year.value)

        batchtextid.value = batch.value;
        yeartextid.value = year.value;

        // console.log(batchtextid.value)

        second.style.display  = "block";
        first.style.display = "none";

});


second.style.display = "none";
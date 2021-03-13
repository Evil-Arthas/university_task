var submitBattonLib1 = document.querySelector('[submit-batton-lib-1]');
if(submitBattonLib1)
{
    submitBattonLib1.onclick = function(){
      var inputArr = document.querySelectorAll('[form-input-values]');
      console.log(inputArr);
    };
}

document.addEventListener("DOMContentLoaded", () => {
    var errorsDiv = document.querySelector('.errors');
    if(errorsDiv.hasChildNodes())
    {
        errorsDiv.style.marginBottom = "10px";
    }
    var successDiv = document.querySelector('.success');
    if(successDiv.hasChildNodes())
    {
        successDiv.style.marginBottom = "10px";
    }
});
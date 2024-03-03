function getElementWidth(content, padding, border){
return content + padding * border
};
console.log(getElementWidth("50px", "8px", "4px"));
console.log(getElementWidth("60px", "12px", "8,5px"));
console.log(getElementWidth("200px", "0px", "0px"));
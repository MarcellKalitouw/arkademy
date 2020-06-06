function devideAndSort(input){
  let noZero = input.split("0");
  console.log(input);
  noZero.sort(function(a,b){return b-a});
  console.log(...noZero);
  let result = [];
  for(let i=0;i<noZero.length;i++){
    let s1 = noZero[i].split("");
    s1.sort();
    result.push(...s1);
  }
  //result.sort();
  console.log(...result);
}

devideAndSort("5956560159466056");
function cetak_gambar(input){
  let column =[];
  if(input%2==1){
    let middle = Math.round(input/2);
    for(let i=0;i<input;i++){
      column=[];
      for(let j=0;j<input;j++){
        if(i==middle-1){
          column.push("*");
        }else{
          if(j==0 || j==input-1)
            column.push("*")
          else column.push("=");
        }
      }
      console.log(...column);
    }
    
  }else{
    console.log("Error Event Number inputed");
  }
}

cetak_gambar(7);
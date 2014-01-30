AddListeners();

function AddListeners(){
  var tds = document.getElementsByTagName('td');
  for(var i = 0, length = tds.length; i < length; i++){
    
    tds[i].addEventListener('dragstart',Drag,false);
    tds[i].addEventListener('drop',Drop,false);
    tds[i].addEventListener('dragover',AllowDrop,false);
  }
};

function AllowDrop(event){
  event.preventDefault();
};

function Drag(event){
  event.dataTransfer.setData("text/plain",event.target.id);
};

function Drop(event){
  
  var data=event.dataTransfer.getData("text/plain");
  var fromID = data.slice(-1);
  var toID = event.target.id.slice(-1);
  if(fromID===toID){
    var text = document.getElementById(data).innerHTML;
    //set both boxes to spinning icons.
    //then ajax both id's to store data in database
    //THEN set the boxes to the new status.
    document.getElementById(data).innerHTML='';
    event.target.innerHTML=text;
  }
    event.preventDefault();
};
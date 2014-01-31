AddListeners();

function AddListeners(){
  DragDropEvents();
  document.getElementById('refreshbtn').addEventListener('click',RefreshTable,false);
};

function DragDropEvents(){
    var tds = document.getElementsByTagName('td');
    for(var i = 0, length = tds.length; i < length; i++){
        tds[i].addEventListener('dragstart',Drag,false);
        tds[i].addEventListener('drop',Drop,false);
        tds[i].addEventListener('dragover',AllowDrop,false);
  }
};

function RefreshTable(event){
    var xmlhttp;
    xmlhttp = new XMLHttpRequest();  
    xmlhttp.open("POST","scripts/location_list.php",false);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send();
    document.getElementById('locationtable').innerHTML= xmlhttp.responseText;
    DragDropEvents();
    event.preventDefault();
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
    if(MoveThatPump(event.target.id,data)==="OK"){
        document.getElementById(data).innerHTML='';
        event.target.innerHTML=text;
    }else{
        alert("Data transfer failed.  Please try again.");
    }
  }
    event.preventDefault();
};

function MoveThatPump(to,from){
    var xmlhttp;
    xmlhttp = new XMLHttpRequest();  
    xmlhttp.open("POST","scripts/move_pump.php",false);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("moveto="+to+"&movefrom="+from);
    return xmlhttp.responseText;
};
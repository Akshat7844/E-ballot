var checked = 0;
var c1=201;
var c2=146;
var c3=89;
var c4=228;
var c5=175;
var c6=129;
var str;
function voteMade(a){

  if (a == 'BJP')
  {
    if(valid())
    {
      if (confirm("You want to vote for Bhartiya Janta Party ?"))
      {
        checked=1;
        localStorage.setItem('users', JSON.stringify({name: "BJP", one: c1, two: c2, three: c3, four: ++c4, five: c5, six: c6, check: 1}));
        alert("You just casted a vote for Bhartiya Janta Party.THANK YOU FOR VOTING.!!");
      }
    }
    else
    {
      alert("You have already casted a vote")
    }
  }
  else if (a == 'CON')
  {
    if (valid())
    {
      if (confirm("You want to vote for Congress Party ?"))
      {
        checked = 1;
        localStorage.setItem('users', JSON.stringify({name: "CON", one: c1, two: ++c2, three: c3, four: c4, five: c5, six: c6, check: 1}));
        alert("You just casted a vote for Indian National Congress Party. THANK YOU FOR VOTING.!!");
      }
    }
    else
    {
      alert("You have already casted a vote")
    }
  }

  else if (a == 'AAP')
  {
    if(valid()){
    if (confirm("You want to vote for Aam Aadmi Party ?"))
    {
      checked = 1;
      localStorage.setItem('users', JSON.stringify({name: "AAP", one: ++c1, two: c2, three: c3, four: c4, five: c5, six: c6, check: 1}));
      alert("You just casted a vote for Aam Aadmi Party. THANK YOU FOR VOTING.!!");
    }
  }
  else
  {
    alert("You have already casted a vote")
  }
  }

  else if (a == 'SAM')
  {
    if(valid()){
    if (confirm("You want to vote for Samajwadi Party ?"))
    {
      checked=1;
      localStorage.setItem('users', JSON.stringify({name: "SAM", one: c1, two: c2, three: ++c3, four: c4, five: c5, six: c6, check: 1}));
      alert("You just casted a vote for Samajwadi Party. THANK YOU FOR VOTING..!!");
    }
  }
  else
  {
    alert("You have already casted a vote")
  }
  }
  
  else if (a == 'BSP')
  {
    if(valid()){
    if (confirm("You want to vote for Bahujan Samaj Party ?"))
    {
      checked = 1;
      localStorage.setItem('users', JSON.stringify({name: "BSP", one: c1, two: c2, three: c3, four: c4, five: c5, six: ++c6, check: 1}));
      alert("You just casted a vote for Bahujan Samaj Party. THANK YOU FOR VOTING..!!");
    }
  }
  else
  {
    alert("You have already casted a vote")
  }
}

else if (a == 'JDU')
  {
    if(valid()){
    if(confirm("You want to vote for Janta Dal United ?"))
    {
      checked  = 1;
      localStorage.setItem('users', JSON.stringify({name: "JDU", one: c1, two: c2, three: c3, four: c4, five: ++c5, six: c6,check: 1}));
      alert("You just casted a vote for Janta Dal United. THANK YOU FOR VOTING..!!");
    }
  }
   else
   {
     alert("You have already casted a vote")
   }
  }

  else
  {
    if(valid()){
    if (confirm("You dont want to vote for any of the parties in the ongoing elections ?"))
    {
      checked=1;
      localStorage.setItem('users', JSON.stringify({name: "NOTA", one: c1, two: c2, three: c3, four: c4, five: c5, six: c6,check: 1}));
      alert("No vote was casted. THANK YOU FOR PARTICIPATING..!!");
    }
  }
  else
   {
     alert("You have already casted a vote")
   }
}
}
function valid()
{
  if(checked)
  {
    return 0;
  }
  else
  {
    return 1;
  }
}
const user=JSON.parse(localStorage.getItem('users'));
const h=setTimeout("update()",1000);
function update()
{
  checked=user.check;
}
const tin1= setTimeout(stop1(),3000)
function stop1()
{
  c4=user.four;
}
const tin2= setTimeout(stop2(),3000)
function stop2()
{
  c3=user.three;
}
const tin3= setTimeout(stop3(),3000)
function stop3()
{
  c2=user.two;
}
const tin4= setTimeout(stop4(),3000)
function stop4()
{
  c1=user.one;
}
const tin5= setTimeout(stop5(),3000)
function stop5()
{
  c5=user.five;
}
const tin6= setTimeout(stop6(),3000)
function stop6()
{
  c6=user.six;
}  


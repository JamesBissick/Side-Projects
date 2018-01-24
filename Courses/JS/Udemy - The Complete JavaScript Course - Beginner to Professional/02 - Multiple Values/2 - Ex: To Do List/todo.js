var tasks = ["Do my Pushups and abs routine","Take Norset 30mg","Study JavaScript","Check my Travian Village","Read a book","Take Creatine"];
var progress = ["Done","In Progress","To do"];

var question1 = prompt("Which task (1 -)" + tasks.length + "?");
var question2 = prompt("Status? 1= Completed, 2= In Progress, 3= To do");

console.log("Today you will " + tasks[(question1-1)] + ". Status of Task " 
+ progress[(question2-1)]);

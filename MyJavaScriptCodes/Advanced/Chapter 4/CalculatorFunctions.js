function GetNumbers()
{
	var F = prompt("First Number : ");
	var S = prompt("Second Number : ");
	var O = prompt("Operator : ");
	var result = Calc(F,S,O);
}
function Calc(FirstNumber , SecondNumber , Operator)
{
	switch(Operator)
	{
		case "+" : return(FirstNumber + SecondNumber) break;
		case "-" : return(FirstNumber - SecondNumber) break;
		case "*" : return(FirstNumber * SecondNumber) break;
		case "/" : return(FirstNumber / SecondNumber) break;
	}
}
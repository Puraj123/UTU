<?php
        $Rst[]= 0.04;   //Static Request time for every page
        $Rdt[]= 0.45;   //Dynamic Request time for every page
        $Stotal; 	//Total score of all pages
	$fStotal; 	//Final Total score of all pages
	$S[]=0.0;	//Score of each page
	$S1[]=0.0;	//Score after first update
	$S2[]=0.0;	//Score after second update
	$P[]=0.0;	//Percent of every page
	$Tmax;          //Maximum static time of all page
	$STmax=10;	//Score of Tmax
	$Ravg;          //Average Request time of one page for 24 hours
	$Total;         //variable to store value
	$RTotalTimes;   //Request total time
	$RTimes;	//Request time
	$n; 		//n=Number of size of site
	$Number;	//Number=Total number of request made by user
    function setup() //Define malicious Threshold
    {
	for($i=0;$i<$n-1;$i++)
        {
            $Tmax= Max($Rst[$i]);
            $STmax= 10.0;
            $S[i]= ($Rst[$i]/$Tmax)*$STmax;
            $STotal=$S[$i]++;
	}
    }
    function update1($Stotal) //Dynamic request time
    {		
        for($i=0;$i<$n-1;$i++)
        {
            for($j=0;$j<$i;$j++)
            {
                $Total= $Total+$Rdt[$i][$j];
		$Number++;
		$Ravg= $Total/$Number;
            }
        }
        for($i=0;i<$n-1;$i++)
        {
            $S[$i]=($Rst[$i]/$Ravg)*$STmax;
            $STotal=$S[$i]++; 
            Return $STotal;	
        }
    }
    function update2($fStotal)  //final total
    {	
        for($i=0;$i<$n-1;$i++)
	{
            $RTotalTimes= $RTotalTimes+$RTimes[$i];
	}
	for($i=0;$i<$n-1;$i++)
	{
            $p[$i]=$RTimes[$i]/$RTotalTimes;
	}
	for($i=0;$i<$n-1;$i++)
        {
            $S2[$i]= $p[$i]*$n*$S1[$i];
            $fSTotal= $S2[$i]++;
        }
	return $fSTotal;
    }
?>

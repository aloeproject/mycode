BEGIN{
	ip1="192.168.2.10";	
	ip2="127.0.0.1";
	sum=0;
	count1=0;
	count2=0;
}{
	sum=sum+1;
	if($1==ip1){
		count1=count1+1;
	}
	if($1==ip2){
		count2=count2+1;
	}
}END{
	print count1/sum"\n";
	print count2/sum"\n";
}

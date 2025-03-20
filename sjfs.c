#include<stdio.h>
void main()
{
	int p[10],bt[10],wt[10],tat[10],n,i,j,temp;
	float awt,atat;
	printf("Enter number of number of processes:");
	scanf("%d",&n);
	printf("Enter the process id:");
	for(i=0;i<n;i++)
	{
		scanf("%d",&p[i]);
	}
	printf("Enter the burst time:");
	for(i=0;i<n;i++)
	{
		scanf("%d",&bt[i]);
	}
	for(i=0;i<n;i++)
	{
		for(j=i+1;j<n;j++)
		{
			if(bt[i]>bt[j])
			{
				temp=bt[i];
				bt[i]=bt[j];
				bt[j]=temp;
				temp=p[i];
				p[i]=p[j];
				p[j]=temp;
			}
		}
	}
	wt[0]=0;
	tat[0]=wt[0]+bt[0];
	awt=wt[0];
	atat=tat[0];
	for(i=1;i<n;i++)
	{
		wt[i]=wt[i-1]+bt[i-1];
		tat[i]=wt[i]+bt[i];
		awt+=wt[i];
		atat+=tat[i];
	}
	awt/=n;
	atat/=n;
	printf("\nShortest job first");
	printf("\npid\t bt \t wt \t tat \n");
	for(i=0;i<n;i++)
	{
		printf("%d \t %d \t %d \t %d \n",p[i],bt[i],wt[i],tat[i]);
	}
	printf("\n average wt = %f",awt);
	printf("\n atat =%f",atat);
}
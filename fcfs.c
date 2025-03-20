#include<stdio.h>
int main() {
    int bt[20],tat[20],wt[20],i,n;
    float wtavg,tatavg;
    printf("\n Enter the number of processes:");
    scanf("%d",&n);
    for(i=0;i<n;i++)
    {
        printf("\nEnter burst time for process %d:",i+1);
        scanf("%d",&bt[i]);
    }
    wt[0]=wtavg=0;
    tat[0]=tatavg=bt[0];
    for(i=1;i<n;i++)
    {
        wt[i] = wt[i-1]+bt[i-1];
        tat[i] = tat[i-1]+bt[i];
        wtavg = wtavg+wt[i];
        tatavg = tatavg+tat[i];
    }
    printf("\tProcess \t Burst Time \t Waiting Time \t Turnaround Time\n");
    for(i=0;i<n;i++)
        printf("\n\t P%d \t \t %d \t\t %d \t\t %d",i+1,bt[i],wt[i],tat[i]);
    printf("\nAverage waiting time %f",wtavg/n);
    printf("\nAverage turnaround time %f",tatavg/n);
    return 0;
}

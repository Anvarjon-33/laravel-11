package main

import "fmt"

var allDone = make(chan bool)
var jobs = make(chan int, 10)

func main() {
	go func() {
		/**
		FOR block ???
		*/
		for {
			job, hasJob := <-jobs
			if hasJob {
				fmt.Println("Job received", job)
			} else {
				fmt.Println("Not more job !")
				allDone <- true
				return
			}
		}
	}()

	for i := 1; i <= 3; i++ {
		jobs <- i
		fmt.Println("Sending job", i)
	}

	close(jobs)
	fmt.Println("SEND ALL JOBS")

	<-allDone

	_, hasJobs := <-jobs
	if !hasJobs {
		fmt.Println("No More Jobs !!!")
	}
}

package main

import (
	"fmt"
	"runtime"
	"time"
)

func myWorker(id int, jobs <-chan int, results chan<- int) {
	for j := range jobs {
		fmt.Println("worker --", id, " ", j)
		time.Sleep(time.Second)
		fmt.Println("worker ---->>>", id, " ", j)
		time.Sleep(2 * time.Second)
		results <- j * 2
	}
}

func main() {

	maxProcs := runtime.NumCPU()
	fmt.Printf("max procs: %d\n", maxProcs)

	numJobs := 5
	jobs := make(chan int, numJobs)
	result := make(chan int, numJobs)
	for w := 1; w <= 3; w++ {
		go myWorker(w, jobs, result)
	}
	for j := 1; j <= numJobs; j++ {
		jobs <- j
		//<-result
	}
	close(jobs)
	for a := 1; a <= numJobs; a++ {
		<-result
	}
}

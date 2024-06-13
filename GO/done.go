package main

import (
	"fmt"
	"time"
)

func worker(done_ chan bool) {
	fmt.Print("working...")
	time.Sleep(time.Second)
	fmt.Println("done")
	done_ <- true
}

func main() {

	done := make(chan bool, 1)
	go worker(done)
	<-done
}

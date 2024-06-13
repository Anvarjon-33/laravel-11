package main

import (
	"fmt"
	"time"
)

func main() {
	tick := time.NewTicker(200 * time.Millisecond)
	allDone := make(chan bool)

	go func() {
		// Here for is not circle, it is for Blocking process
		for {
			select {
			case <-allDone:
				return
			case t := <-tick.C:
				fmt.Println("Ticking at", t)
			}
		}
	}()

	time.Sleep(2 * time.Second)
	tick.Stop()
	allDone <- true
	fmt.Println("All Done, No tickets")
}

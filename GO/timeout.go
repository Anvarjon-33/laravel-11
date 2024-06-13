package main

import (
	"fmt"
	"time"
)

func main() {
	chan1 := make(chan string)
	chan2 := make(chan string)
	chan3 := make(chan string)
	go func() {
		time.Sleep(2 * time.Second)
		chan1 <- "Channels ONE is Evaluated"
	}()
	go func() {
		time.Sleep(4 * time.Second)
		chan2 <- "Channels TWO is Evaluated"
	}()
	// Waiting for first message
	select {
	case msg := <-chan1:
		fmt.Println(msg)
	case <-time.After(1 * time.Second):
		fmt.Println("timeout for FIRST msg")
	}
	// Waiting for second message
	select {
	case msg2 := <-chan2:
		fmt.Println(msg2)
	case <-time.After(3 * time.Second):
		fmt.Println("timeout for SECOND msg")
	}
	go func() {
		chan3 <- "Channels THREE is Evaluated"
		println(<-chan3)
	}()
}

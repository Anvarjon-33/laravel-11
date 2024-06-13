package main

import (
	"fmt"
	"time"
)

var chan1 = make(chan string)
var chan2 = make(chan string)

func main() {
	go func() {
		time.Sleep(2 * time.Second)
		chan1 <- "The first channel"
	}()
	go func() {
		time.Sleep(1 * time.Second)
		chan2 <- "The second channel"
	}()
	go func() {
		time.Sleep(3 * time.Second)
		chan2 <- "The third channel"
	}()

	for i := 0; i < 3; i++ {
		select {
		case msg1 := <-chan1:
			fmt.Println(msg1)
		case msg2 := <-chan2:
			fmt.Println(msg2)
		}
	}
	//fmt.Println("-------", <-chan1)
	//fmt.Println("--------", <-chan2)
}

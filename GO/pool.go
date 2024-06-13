package main

import (
	"fmt"
	"time"
)

func workers(chan1 chan<- string, msg string) {
	time.Sleep(2 * time.Second)
	chan1 <- msg
}

func main() {
	chan1 := make(chan string)
	go workers(chan1, "Any Example String")
	fmt.Println(<-chan1)
}

package main

import (
	"fmt"
	"time"
)

func say(s string, t int, repeat int, done chan bool) {
	if repeat == 0 {
		repeat = 5
	}
	for i := 0; i < repeat; i++ {
		time.Sleep(time.Duration(t) * time.Second)
		fmt.Println(s)
	}
	done <- true
}

func main() {
	done := make(chan bool)
	go say("---ROUTINE---", 1, 5, done)
	go say("simple function", 1, 5, done)
	<-done
}

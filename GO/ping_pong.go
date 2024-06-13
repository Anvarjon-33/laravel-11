package main

import "fmt"

func receiver(ping chan<- string, msg string) {
	ping <- msg
}
func sender(ping <-chan string, pong chan<- string) {
	msg := <-ping
	pong <- msg
}

func main() {
	ping := make(chan string, 1)
	pong := make(chan string, 1)
	receiver(ping, "sending_message")
	sender(ping, pong)
	fmt.Println(<-pong)
}

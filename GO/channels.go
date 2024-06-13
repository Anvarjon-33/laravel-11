package main

import "fmt"

var message = make(chan string, 3) // creating channel with 3 buffers
func main() {
	message <- "first_item"
	message <- "second_item"
	message <- "third_item"
	fmt.Println(<-message)
	fmt.Println(<-message)
	fmt.Println(<-message)
}

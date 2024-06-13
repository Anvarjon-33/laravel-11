package main

import "fmt"

func closer() func() int {
	i := 0
	return func() int {
		i++
		return i
	}
}
func main() {
	f := closer()
	fmt.Println(f())
	fmt.Println(f())
	fmt.Println(f())
	fmt.Println("\n")
	newF := closer()
	fmt.Println(newF())
	fmt.Println(&f)
}

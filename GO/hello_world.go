package main

import "fmt"

func main() {

	//fmt.Println(time.Now().Weekday())
	//fmt.Println(time.Now().Year())

	//for i := range 10 {
	//	fmt.Println("rannge", i)
	//}

	//fmt.Println("\nhello world")

	whatAmI := func(i interface{}) {
		switch t := i.(type) {
		case bool:
			fmt.Println("I'm a bool")
		case int:
			fmt.Println("I'm an int")
		default:
			fmt.Printf("Don't know type %T\n", t)
		}
	}
	whatAmI(true)
	whatAmI(1)
	whatAmI("hey")

	//	Arrays
	arr := [...]int{1, 15: 2, 3}

	fmt.Println(len(arr))

	var twoD [3][3][3]int
	for i := 0; i < 2; i++ {
		for j := 0; j < 3; j++ {
			for k := 0; k < 3; k++ {
				twoD[i][j][k] = i + j + k
			}
		}
	}
	fmt.Println("2d: ", twoD)

	mapped := map[string]string{"one": "First", "two": "Second", "three": "Third"}
	for k, v := range mapped {
		fmt.Printf("%s -> %s\n", k, v)
	}
}

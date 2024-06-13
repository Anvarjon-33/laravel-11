package main

import "fmt"

type person struct {
	name string
	age  int
}

func newPerson(name string, age int) person {
	return person{
		name: name,
		age:  age,
	}
}

func newPerson1(name string, age int) *person {
	return &person{
		name: name,
		age:  age,
	}
}

var user = newPerson("Anvar", 33)
var User1 = newPerson1("Anvarjon", 37)
var User2 = &person{name: "Another", age: 55}
var User3 person

func main() {
	fmt.Println(person{"Bob", 20})
	fmt.Println(user)
	fmt.Println(User1)
	fmt.Println(User2)
	fmt.Println("User-3", User3)
}

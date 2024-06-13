package main

import (
	"fmt"
)

//ConstDecl      = "const" ( ConstSpec | "(" { ConstSpec ";" } ")" ) .
//ConstSpec      = IdentifierList [ [ Type ] "=" ExpressionList ] .
//
//IdentifierList = identifier { "," identifier } .
//ExpressionList = Expression { "," Expression } .

const (
	Sunday = 2 << iota
	Monday
	Tuesday
	Wednesday
	Thursday
	Friday
	Saturday
	numberOfDays // this constant is not exported
)

type square struct {
	height int
	width  int
}

func (r *square) area() int {
	return r.height * r.width
}

func (r *square) perimeter() int {
	return 2*r.width + 2*r.height
}

func main() {
	r := square{height: 10, width: 20}
	fmt.Println("area: ", r.area())
	fmt.Println("perimeter: ", r.perimeter())
}

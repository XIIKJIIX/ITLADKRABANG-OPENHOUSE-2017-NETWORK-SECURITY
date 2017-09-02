package main

import (
	"fmt"
)

func main() {
	var ans int
	fmt.Println("What is the 123456 th prime number?")
	fmt.Scanf("%d", &ans)
	if ans == 1632899 {
		fmt.Println("Flag{J3st_An_3z_Primze}")
	} else {
		fmt.Println("Wrong, ans.")
	}
}

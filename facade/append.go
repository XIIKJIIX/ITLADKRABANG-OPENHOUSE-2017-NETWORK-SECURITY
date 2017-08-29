package main

import (
	"io/ioutil"
	"os"
)

func main() {
	f, err := os.OpenFile("./White.jpg", os.O_APPEND|os.O_WRONLY, 0755)
	if err != nil {
		panic(err)
	}
	defer f.Close()
	zip, err := ioutil.ReadFile("./losted.zip")
	if err != nil {
		panic(err)
	}
	if _, err := f.Write(zip); err != nil {
		panic(err)
	}
}

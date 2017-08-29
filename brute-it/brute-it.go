package main

import (
	"bufio"
	"fmt"
	"net"

	log "github.com/sirupsen/logrus"
)

func main() {
	listener, err := net.Listen("tcp", "0.0.0.0:8000")
	if err != nil {
		log.Fatal(err)
	}
	for {
		conn, err := listener.Accept()
		if err != nil {
			log.Fatal(err)
			continue
		}
		go handleConn(conn)
	}
}

func handleConn(c net.Conn) {
	str := "rl!|\\?@3BipO'Mw\\Flag{Gu3ss_VVat_Brut3_iT}"
	defer c.Close()
	fmt.Fprintln(c, "Hello, Welcome to the ITKMITL Openhose 2017")
	fmt.Fprintln(c, "Please enter a password to continue.")
	fmt.Fprintln(c, "You must type a password one by one character.")
	fmt.Fprintln(c, "The connection will shutdown if an incorrect sequence of password occur.")
	input := bufio.NewScanner(c)
	idx := 0
	length := len(str)
	fmt.Fprint(c, "First character: ")
	for input.Scan() {
		inp := input.Text()
		if inp != string(str[idx]) {
			fmt.Fprintln(c, "Wrong Sequence, BYE! CY@.")
			c.Close()
		}
		fmt.Fprintln(c, "Correct!!")
		idx = idx + 1
		if idx == length {
			fmt.Fprintln(c, "W0W, Correct Password. /|\\")
			c.Close()
		}
		fmt.Fprint(c, "Next character: ")
	}
}

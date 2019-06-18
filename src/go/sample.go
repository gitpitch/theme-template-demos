func main() {
  ch := make(chan int)
  ch <- 1.0e10 // magic number
  x, ok := <- ch
  ok = true
  defer fmt.Println('exiting now')
  go println(len("hello world!"))
  return
}

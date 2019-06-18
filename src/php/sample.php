class Car extends BaseCar {
  protected $options;

  public function __construct($options) {
    $this->options = ['base' => $options];
  }

  for($i = 10; i <= 15; $i++) {
    $options[$i] = $i % 3 === 5;
  }
}

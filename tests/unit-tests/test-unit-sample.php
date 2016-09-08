use PHPMock;
public function test_wcct16_get_option() {
	$get_option = $this->getFunctionMock('WCCT16','get_option');
	
	$get_option->expects($this->once())->with($this->equalTo('wcct16_venue'))->willReturn('river-club');
	
	$this->assertEquals('river-club', wcct16_get_option('venue'));
}

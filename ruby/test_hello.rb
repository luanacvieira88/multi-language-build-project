# /ruby/test_hello.rb
require 'minitest/autorun'
require_relative 'hello'

class TestHello < Minitest::Test
    def test_greet
        assert_equal "Hello, World!", greet
    end
end

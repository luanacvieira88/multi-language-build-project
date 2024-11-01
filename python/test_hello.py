# /python/test_hello.py
import unittest
from hello import greet

class TestHello(unittest.TestCase):
    def test_greet(self):
        self.assertEqual(greet(), "Hello, World!")

if __name__ == "__main__":
    unittest.main()
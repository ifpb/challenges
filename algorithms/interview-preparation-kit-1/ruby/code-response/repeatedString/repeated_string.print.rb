require_relative "./repeated_string"

puts(RepeatedString.repeat('a', 10))
puts(10)

puts(RepeatedString.repeat('b', 10))
puts(0)

puts(RepeatedString.repeat('aba', 10))
puts(7)

puts(RepeatedString.repeat('a', 1000000000000))
puts(1000000000000)
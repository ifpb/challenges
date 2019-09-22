require_relative "./rot_left"

arr = [1, 2, 3, 4, 5]
print(RotLeft.rotate(arr, 1))
puts('')
print([2, 3, 4, 5, 1])

arr = [1, 2, 3, 4, 5]
puts('')
print(RotLeft.rotate(arr, 4))
puts('')
print([5, 1, 2, 3, 4])

arr = [41, 73, 89, 7, 10, 1, 59, 58, 84, 77, 77, 97, 58, 1, 86, 58, 26, 10, 86, 51]
puts('')
print(RotLeft.rotate(arr, 10))
puts('')
print([77, 97, 58, 1, 86, 58, 26, 10, 86, 51, 41, 73, 89, 7, 10, 1, 59, 58, 84, 77])

arr = [33, 47, 70, 37, 8, 53, 13, 93, 71, 72, 51, 100, 60, 87, 97]
puts('')
print(RotLeft.rotate(arr, 13))
puts('')
print([87, 97, 33, 47, 70, 37, 8, 53, 13, 93, 71, 72, 51, 100, 60])

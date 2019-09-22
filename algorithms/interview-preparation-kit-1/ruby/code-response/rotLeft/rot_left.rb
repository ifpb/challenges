class RotLeft
    def RotLeft.rotate(arr, n)
        new_arr = Array.new(arr.length)
        arr.length.times do |i|
            new_index = (i + n) % arr.length
            new_arr[i] = arr[new_index]
        end
        return new_arr
    end

end
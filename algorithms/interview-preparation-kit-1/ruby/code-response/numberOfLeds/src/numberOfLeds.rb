class NumberOfLeds
    def NumberOfLeds.leds(num)
        result = 0
        total = num.to_s
        total = total.split('')
        #total = total.reduce(0){|t, l| t + led[l]}
        for i in total do
          if i == '0' then
            result += 6
          end
          if i == '1' then
            result += 2
          end
          if i == '2' then
            result += 5
          end
          if i == '3' then
            result += 5
          end
          if i == '4' then
            result += 4
          end
          if i == '5' then
            result += 5
          end
          if i == '6' then
            result += 6
          end
          if i == '7' then
            result += 3
          end
          if i == '8' then
            result += 7
          end
          if i == '9' then
            result += 6
          end
        end
        return result
    end
end
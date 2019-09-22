class ArrayStats
    def ArrayStats.stats(arr)
        status = [0, 0, 0]

        arr.each do |e|
            if e < 0
                status[0] += 1
            elsif e === 0
                status[1] += 1
            else
                status[2] += 1
            end
        end

        return status.map do |stat|
            '%.6f' % (stat.to_f / arr.size)
        end
    end

end
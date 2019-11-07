require_relative "../src/min_max_sum"

describe MinMaxSum do
  describe ".calc" do
    context "[1, 2, 3, 4, 5]" do
      it "return [10, 14]" do
        value = [1, 2, 3, 4, 5]
        expected = [10, 14]
        expect(MinMaxSum.calc(value)).to eql(expected)
      end
    end

    xcontext "[0, 2, 6, 3, 4]" do
      it "return [9, 15]" do
        value = [0, 2, 6, 3, 4]
        expected = [9, 15]
        expect(MinMaxSum.calc(value)).to eql(expected)
      end
    end

    xcontext "[10, 23, 61, 37, 41]" do
      it "return [111, 162]" do
        value = [10, 23, 61, 37, 41]
        expected = [111, 162]
        expect(MinMaxSum.calc(value)).to eql(expected)
      end
    end
  end
end

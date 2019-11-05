require_relative "../../src/ArrayStats/array_stats"

describe ArrayStats do
  describe ".stats" do
    context "[1, 1, 1]" do
      it "['0.000000', '0.000000', '1.000000']" do
        expect(ArrayStats.stats([1, 1, 1])).to eql(['0.000000', '0.000000', '1.000000'])
      end
    end
    xcontext "[0, 0, 1, 1]" do
      it "['0.000000', '0.500000', '0.500000']" do
        expect(ArrayStats.stats([0, 0, 1, 1])).to eql(['0.000000', '0.500000', '0.500000'])
      end
    end
    xcontext "[-4, 3, -9, 0, 4, 1]" do
      it "['0.333333', '0.166667', '0.500000']" do
        expect(ArrayStats.stats([-4, 3, -9, 0, 4, 1])).to eql(['0.333333', '0.166667', '0.500000'])
      end
    end
    xcontext "[1, 2, 3, -1, -2, -3, 0, 0]" do
      it "['0.375000', '0.250000', '0.375000']" do
        expect(ArrayStats.stats([1, 2, 3, -1, -2, -3, 0, 0])).to eql(['0.375000', '0.250000', '0.375000'])
      end
    end
  end
end
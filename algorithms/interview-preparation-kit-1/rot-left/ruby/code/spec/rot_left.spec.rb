require_relative "../src/rot_left"

describe RotLeft do
  describe ".rotate" do
    context "1 left rotate" do
      it "[2, 3, 4, 5, 1]" do
        expect(RotLeft.rotate([1, 2, 3, 4, 5], 1)).to eql([2, 3, 4, 5, 1])
      end
    end
    xcontext "4 left rotate" do
      it "[2, 3, 4, 5, 1]" do
        expect(RotLeft.rotate([1, 2, 3, 4, 5], 4)).to eql([5, 1, 2, 3, 4])
      end
    end
    xcontext "10 left rotate" do
      it "[77, 97, 58, 1, 86, 58, 26, 10, 86, 51, 41, 73, 89, 7, 10, 1, 59, 58, 84, 77]" do
        expect(RotLeft.rotate([41, 73, 89, 7, 10, 1, 59, 58, 84, 77, 77, 97, 58, 1, 86, 58, 26, 10, 86, 51], 10))
          .to eql([77, 97, 58, 1, 86, 58, 26, 10, 86, 51, 41, 73, 89, 7, 10, 1, 59, 58, 84, 77])
      end
    end
    xcontext "13 left rotate" do
      it "[87, 97, 33, 47, 70, 37, 8, 53, 13, 93, 71, 72, 51, 100, 60]" do
        expect(RotLeft.rotate([33, 47, 70, 37, 8, 53, 13, 93, 71, 72, 51, 100, 60, 87, 97], 13))
          .to eql([87, 97, 33, 47, 70, 37, 8, 53, 13, 93, 71, 72, 51, 100, 60])
      end
    end
  end
end
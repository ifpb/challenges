require_relative "../../src/ZeroMeansZero/zero_means_zero"

describe ZeroMeansZero do
  describe ".noZero" do
    context "Sum without zero" do
      it "return 5" do
        expect(ZeroMeansZero.noZero(5,45)).to eql(5)
      end
    end
  end
end
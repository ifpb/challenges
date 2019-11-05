require_relative "../../src/Valleys/valleys"

describe Valleys do
	describe ".count" do
		context "Count how many valleys exists" do
			it "return 1" do
				expect(Valleys.count("DU")).to eql(1)
			end
		end

		context "Count how many valleys exists" do
			it "return 2" do
				expect(Valleys.count("DUDU")).to eql(2)
			end
		end
		
		context "Count how many valleys exists" do
			it "return 0" do
				expect(Valleys.count("UUUDU")).to eql(0)
			end
		end
		
		context "Count how many valleys exists" do
			it "return 1" do
				expect(Valleys.count("UDDDUDUU")).to eql(1)
			end
		end
		
		context "Count how many valleys exists" do
			it "return 2" do
				expect(Valleys.count("DDUUDDUDUUUD")).to eql(2)
			end
		end
	end
end
